<?php
namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    
    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->paginate(5);
        return view('mahasiswa.index',compact('mahasiswa'), ['title'=>'Tab Mahasiswa'])

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()
    {
        return view('mahasiswa.create', ['title'=>'Tab Mahasiswa']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([

            'nim' => 'required|max:10',
            'nama' => 'required',
            'alamat' => 'required',
            'prodi' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

        }
        Mahasiswa::create($input);

     

        return redirect()->route('mahasiswa.index')

                        ->with('success','Mahasiswa created successfully.');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show',compact('mahasiswa'), ['title'=>'Tab Mahasiswa']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit',compact('mahasiswa'), ['title'=>'Tab Mahasiswa']);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|max:10',
            'nama' => 'required',
            'alamat' => 'required',
            'prodi' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
        ]);
        //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{
            unset($input['image']);
        }
        $mahasiswa->update($input);
        return redirect()->route('mahasiswa.index')

                        ->with('success','Mahasiswa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
                        ->with('success','Mahasiswa deleted successfully');

    }

}
