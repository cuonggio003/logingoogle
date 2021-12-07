<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Symfony\Polyfill\Intl\Idn\Info;

class NoteAjaxController extends Controller
{
    public function index()
    {
        $notes = Note::orderBy('id', 'desc')->paginate(4);

        return view('backend.index', [
            'notes' => $notes,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $note = Note::create($request->all());
        $note->save();
        return response()->json(['data'=>$note, 'message'=>'Tạo mới bản ghi thành công'],200);
    }

    public function show($id)
    {
        $note = Note::find($id);
        return response()->json(['data'=>$note, 'name' =>'Du lịch'],200);

    }

    public function edit($id)
    {
        $note = Note::find($id);
        $note->save();
        return response()->json(['data'=>$note, 'name' =>'Du lịch'],200);
    }

    public function update(Request $request, $id)
    {
        $note = Note::find($id)->update($request->all());
        $note->save();
        return response()->json(['data'=>$note, 'note' => $request->all(),'noteid' => $id,'message'=>'Cập nhật thông tin thành công'],200);
    }

    public function destroy($id)
    {
        Note::find($id)->delete();
        return response()->json(['data'=>'removed'],200);
    }
}
