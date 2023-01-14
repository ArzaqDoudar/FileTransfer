<?php
namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
    public function index()
    {
        $pathToFile=public_path(). "/download/exp1.pdf";
        $name = 'laravel';
        $headers = array(
            'Content-Type: application/pdf',
          );
        return response()->download($pathToFile, $name, $headers);
        // return view('index');
    }
    public function upload()
    {
        return view('upload');
    }
    public function show()
    {
        return view('show');
    }
    public function store(Request $request)
    {
        
        // dd($request->all());
        $characters = '01234abcdefghijABCDEF56789GHIJKMNklmnopqrsQRSTUVtuvwxyzLOPWXYZ';
        $link = '';
        for ($i = 0; $i < 8; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $link .= $characters[$index];
        }
        
        $request->merge([
            'link' => $link,
        ]);
        $data = $request->except('hiddenFile');
        if($request->hasFile('hiddenFile') && $request->file('hiddenFile')->isValid()){
            $file = $request->file('hiddenFile'); 
            $data['hiddenFile'] = $file->store('files' , [
                'disk' => 'public'
            ]);
        };
        // dd($data);
        $file = new File();
        // $file = File::create($data);

        $file = new File();
        $file->from = $request->post('from');
        $file->to = $request->post('to');
        $file->title = $request->input('title');
        $file->message = $request->message;
        $file->link = $link;
        $file->file =$data['hiddenFile'] ;
        // dd($file);
        $file->save(); 
        // dd($file->id);
        // Mail::send('show' , config('app.url')/$link);
        return view('show')
            ->with('id' , $file->id)
            ->with('file',$request->input('hiddenFile'))
            ->with('link', $link);
    }

    public function code($linkCode)
    {
        $files = File::all();
        foreach ($files as $file) {
            if ($file->link == $linkCode) {
                return view('show')
                ->with('id' , $file->id)
                ->with('file',$file->file)
                ->with('link', $file->link);            }
        }
        return abort(404);
    }

    public function download($id)
    {
        $fileD=File::find($id);
        // $file = Storage::disk('public')->get($$fileD->file);
        // dd($file);
        return response()->download(storage_path("app/public/{$fileD->file}"),$fileD->title);
        // return Storage::download($fileD->file , $fileD->title);
        // return redirect('/show');
    }
    public function destroy($id)
    {
        $file = File::find($id);
        if($file->file){
            Storage::disk('public')->delete($file->file);
        }
        File::destroy($id);
        return redirect('/');
    }
}
