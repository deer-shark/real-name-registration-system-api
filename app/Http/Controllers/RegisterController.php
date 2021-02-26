<?php

namespace App\Http\Controllers;

use App\Entity\Guest;
use App\Mail\Reg;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
    /**
     * @var Guest
     */
    private $guest;

    public function __construct(Guest $guest)
    {
        //$this->middleware('auth:api', ['except' => ['new']]);

        $this->guest = $guest;
    }

    public function reg(Request $request)
    {
        $data = $request->all();
        $email = $request->input('email');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $org = $request->input('org');
        $org_role = $request->input('org_role');

        unset($data['email'], $data['name'], $data['phone'], $data['org'], $data['org_role']);

        $hash = md5(rand());
        while (count($this->guest->where('hash', $hash)->get()))
            $hash = md5(rand());

        $this->guest->create(['name' => $name, 'email' => $email, 'phone' => $phone, 'org' => $org, 'org_role' => $org_role, 'question' => json_encode($data), 'hash' => $hash]);

        Mail::to($email)->queue(new Reg(['name' => $name, 'hash' => $hash]));

        return response()->json([], Response::HTTP_CREATED);
    }

    /*public function getAll()
    {
        $result = $this->guest->all();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getBySchool(Request $request, $school)
    {
        $result = $this->guest->where('school', $school)->get();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByStudent(Request $request, $school, $student_id)
    {
        $result = $this->guest->where('student_id', $student_id)->where('school', $school)->get();
        if (count($result) == 0)
            return response()->json(['error' => 'Student Not Found'], Response::HTTP_NOT_FOUND);
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByClass(Request $request, $school, $class)
    {
        $result = $this->guest->where('class', $class)->where('school', $school)->get();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByHash(Request $request, $hash)
    {
        $result = $this->guest->where('hash', $hash)->get();
        if (count($result) == 0)
            return response()->json(['error' => 'Hash Not Found'], Response::HTTP_NOT_FOUND);
        return response()->json($result, Response::HTTP_OK);
    }

    public function new(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'school' => ['required', 'string'],
            'student_id' => ['required', 'string'],
            'class' => ['required', 'integer'],
            'seat' => ['required', 'integer'],
            'name' => ['required', 'string'],
        ]);
        if ($validator->fails())
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        $this->guest->where('student_id', $request->input('student_id'))->where('school', $request->input('school'))->delete();
        $hash = md5(rand());
        while (count($this->guest->where('hash', $hash)->get()))
            $hash = md5(rand());
        $result = $this->guest->create(array_merge($request->all(), ['hash' => $hash]));
        return response()->json($result, Response::HTTP_CREATED);
    }

    public function deleteByStudent(Request $request, $school, $student_id)
    {
        if ($this->guest->where('student_id', $student_id)->where('school', $school)->delete() == 0)
            return response()->json(['error' => 'Student Not Found'], Response::HTTP_NOT_FOUND);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }

    public function deleteByHash(Request $request, $hash)
    {
        if ($this->guest->where('hash', $hash)->delete() == 0)
            return response()->json(['error' => 'Hash Not Found'], Response::HTTP_NOT_FOUND);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }*/

}
