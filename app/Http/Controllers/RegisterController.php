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

    public function getAll()
    {
        $result = $this->guest->all();
        return response()->json($result, Response::HTTP_OK);
    }

    public function getByHash(Request $request, $hash)
    {
        $result = $this->guest->where('hash', $hash)->get();
        if (count($result) == 0)
            return response()->json(['error' => 'Hash Not Found'], Response::HTTP_NOT_FOUND);
        return response()->json($result, Response::HTTP_OK);
    }

    public function deleteByHash(Request $request, $hash)
    {
        if ($this->guest->where('hash', $hash)->delete() == 0)
            return response()->json(['error' => 'Hash Not Found'], Response::HTTP_NOT_FOUND);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }

}
