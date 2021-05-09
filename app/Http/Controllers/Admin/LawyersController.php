<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lawyers;
use Yajra\DataTables\DataTables;
use Auth, File;
use Illuminate\Support\Facades\Storage;


class LawyersController extends Controller
{
    use \App\Traits\ApiResponseTrait;

    /**
     * @return mixed
     * @throws \Exception
     */
    public function allData(Request $request)
    {
        $data = Lawyers::get();
        return $this->mainFunction($data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('Admin.Lawyers.index');
    }

    /**
     * @param Request $request
     * @return int
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $this->validate(
            $request,
            [
                'image' => 'required|image',
            ],
            [
                'image.required' =>'من فضلك ادخل صوره المحامي ',
                'image.image' =>' صوره المحامي يجب ان يكون صوره',
            ]
        );
        $this->save_Lawyers($request,new Lawyers);
        return $this->apiResponseMessage(1,'تم اضافة المحامي بنجاح',200);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $Lawyers = Lawyers::find($id);
        return $Lawyers;
    }

    /**
     * @param Request $request
     * @return int
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {

        $Lawyers = Lawyers::find($request->id);
        $this->save_Lawyers($request,$Lawyers);
        return $this->apiResponseMessage(1,'تم تعديل معلومات المحامي بنجاح',200);
    }

    /**
     * @param $request
     * @param $brand
     */
    public function save_Lawyers($request,$Lawyers){
        $Lawyers->name=$request->name;
        $Lawyers->title=$request->title;
        if($request->image) {
            deleteFile('Lawyers',$Lawyers->image);
            $Lawyers->image=saveImage('Lawyers',$request->image);
        }
        $Lawyers->save();
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|int
     */
    public function destroy($id,Request $request)
    {
        if ($request->type == 2) {
            $ids = explode(',', $id);
            $Lawyers = Lawyers::whereIn('id', $ids)->get();
            foreach($Lawyers as $row){
                $this->deleteRow($row);
            }
        } else {
            $Lawyers = Lawyers::find($id);
            $this->deleteRow($Lawyers);
        }
        return response()->json(['errors' => false]);
    }

    /**
     * @param $cat
     */
    private function deleteRow($Lawyers){
        deleteFile('Lawyers',$Lawyers->image);
        $Lawyers->delete();
    }

    /**
     * @param $data
     * @return mixed
     * @throws \Exception
     */
    private function mainFunction($data)
    {
        return Datatables::of($data)->addColumn('action', function ($data) {
            $options = '<td class="sorting_1"><button  class="btn btn-info waves-effect btn-circle waves-light" onclick="editFunction(' . $data->id . ')" type="button" ><i class="fa fa-spinner fa-spin" id="loadEdit_' . $data->id . '" style="display:none"></i><i class="sl-icon-wrench"></i></button>';
            $options .= ' <button type="button" onclick="deleteFunction(' . $data->id . ',1)" class="btn btn-dribbble waves-effect btn-circle waves-light"><i class="sl-icon-trash"></i> </button></td>';
            return $options;
        })->addColumn('checkBox', function ($data) {
            $checkBox = '<td class="sorting_1">' .
                '<div class="custom-control custom-checkbox">' .
                '<input type="checkbox" class="mybox" id="checkBox_' . $data->id . '" onclick="check(' . $data->id . ')">' .
                '</div></td>';
            return $checkBox;
        })->editColumn('image', function ($data) {
            $image = '<a href="'. getImageUrl('Lawyers',$data->image).'" target="_blank">'
                .'<img  src="'. getImageUrl('Lawyers',$data->image) . '" width="50px" height="50px"></a>';
            return $image;
        })->rawColumns(['action' => 'action','checkBox'=>'checkBox','image'=>'image'])->make(true);
    }
}
