<?php

namespace App\Http\Controllers;

use App\Entity\Guest;
use App\Entity\History;
use App\Entity\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class AdmissionController extends Controller
{
    /**
     * @var History
     */
    private $history;
    /**
     * @var Guest
     */
    private $guest;
    /**
     * @var User
     */
    private $user;

    public function __construct(History $history, Guest $guest, User $user)
    {
        $this->middleware('auth:api');

        $this->history = $history;
        $this->guest = $guest;
        $this->user = $user;
    }

    public function getAll()
    {
        $result = array();
        foreach ($this->history->all() as $history) {
            $guest = $this->guest->where('id', $history['guest_id'])->first();
            $operator = $this->user->where('id', $history['operator_id'])->first();
            $result[] = array_merge($history->only(['id', 'created_at']), array('guest' => $guest, 'operator' => $operator->only(['id', 'name', 'organize', 'role'])));
        }
        return response()->json($result, Response::HTTP_OK);
    }

    public function getBySchool(Request $request, $school)
    {
        $result = array();
        foreach ($this->guest->where('school', $school)->get() as $guest) {
            foreach ($this->history->where('guest_id', $guest['id'])->get() as $history) {
                $operator = $this->user->where('id', $history['operator_id'])->first();
                $result[] = array_merge($history->only(['id', 'created_at']), array('guest' => $guest, 'operator' => $operator->only(['id', 'name', 'organize', 'role'])));
            }
        }
        $result = collect($result)->sortBy('id')->values();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByStudent(Request $request, $school, $student_id)
    {
        $result = array();
        $student = $this->guest->where('student_id', $student_id)->where('school', $school)->get();
        if (count($student) == 0)
            return response()->json(['error' => 'Student Not Found'], Response::HTTP_NOT_FOUND);
        foreach ($student as $guest) {
            foreach ($this->history->where('guest_id', $guest['id'])->get() as $history) {
                $operator = $this->user->where('id', $history['operator_id'])->first();
                $result[] = array_merge($history->only(['id', 'created_at']), array('guest' => $guest, 'operator' => $operator->only(['id', 'name', 'organize', 'role'])));
            }
        }
        $result = collect($result)->sortBy('id')->values();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByClass(Request $request, $school, $class)
    {
        $result = array();
        foreach ($this->guest->where('class', $class)->where('school', $school)->get() as $guest) {
            foreach ($this->history->where('guest_id', $guest['id'])->get() as $history) {
                $operator = $this->user->where('id', $history['operator_id'])->first();
                $result[] = array_merge($history->only(['id', 'created_at']), array('guest' => $guest, 'operator' => $operator->only(['id', 'name', 'organize', 'role'])));
            }
        }
        $result = collect($result)->sortBy('id')->values();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByHash(Request $request, $hash)
    {
        $result = array();
        $student = $this->guest->where('hash', $hash)->get();
        if (count($student) == 0)
            return response()->json(['error' => 'Hash Not Found'], Response::HTTP_NOT_FOUND);
        foreach ($student as $guest) {
            foreach ($this->history->where('guest_id', $guest['id'])->get() as $history) {
                $operator = $this->user->where('id', $history['operator_id'])->first();
                $result[] = array_merge($history->only(['id', 'created_at']), array('guest' => $guest, 'operator' => $operator->only(['id', 'name', 'organize', 'role'])));
            }
        }
        $result = collect($result)->sortBy('id')->values();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByOperator(Request $request, $operator_id)
    {
        $result = array();
        $operator = $this->user->where('id', $operator_id)->first();
        if ($operator == null)
            return response()->json(['error' => 'Operator Not Found'], Response::HTTP_NOT_FOUND);
        foreach ($this->history->where('operator_id', $operator_id)->get() as $history) {
            $guest = $this->guest->where('id', $history['guest_id'])->get();
            $result[] = array_merge($history->only(['id', 'created_at']), array('guest' => $guest, 'operator' => $operator->only(['id', 'name', 'organize', 'role'])));
        }
        $result = collect($result)->sortBy('id')->values();
        return response()->json($result, Response::HTTP_OK);
    }

    public function new(Request $request)
    {
        /*$validator = Validator::make($request->all(), [
            'hash' => ['required', 'string'],
        ]);
        if ($validator->fails())
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);*/
        $guest=null;
        if($request->input('hash')!=null){
            $guest = $this->guest->where('hash', $request->input('hash'))->first();
            if ($guest == null)
                return response()->json(['error' => 'Hash Not Found'], Response::HTTP_NOT_FOUND);
        }elseif ($request->input('student_id')!=null){
            $guest = $this->guest->where('student_id', $request->input('student_id'))->first();
            if ($guest == null)
                return response()->json(['error' => 'Student Id Not Found'], Response::HTTP_NOT_FOUND);
        }else
            return response()->json('', Response::HTTP_BAD_REQUEST);
        
        $operator = $this->user->where('id', auth()->user()['id'])->first();
        $res = $this->history->create(['guest_id' => $guest['id'], 'operator_id' => $operator['id']]);
        $result = array_merge($res->only(['id']), array('times' => count($this->history->where('guest_id', $guest['id'])->get())), array('guest' => $guest, 'operator' => $operator->only(['id', 'name', 'organize', 'role'])));;
        return response()->json($result, Response::HTTP_CREATED);
    }

    public function deleteByHistoryId(Request $request, $history_id)
    {
        if ($this->history->where('id', $history_id)->delete() == 0)
            return response()->json(['error' => 'History Not Found'], Response::HTTP_NOT_FOUND);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }

}
