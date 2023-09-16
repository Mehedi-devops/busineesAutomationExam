<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Bank;
use App\Models\Branch;
use App\Models\SubCategory;
use App\Models\BusinessSector;
use App\Models\Thana;
use App\Models\District;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;


class AccountController extends Controller
{
    public function list(){

        $datas = Account::with('bank','branch','country')->get();  
        return view('account.list',['datas' => $datas]);
    }
    public function create(){

        $banks = Bank::get();
        $countries = Country::get();
        $districts = District::get();
        $businesses = BusinessSector::get();
        return view('account.create',['banks'=>$banks,'countries'=>$countries,'districts'=>$districts,'businesses'=>$businesses]);
    }

    public function store(Request $request){
        $request->validate([
            'bank_id' => ['required'],
            'country_id' => ['required'],
            'branch_id' => ['required'],
            'branchCode' => ['required'],
            'thana_id' => ['required'],
            'district_id' => ['required'],
            'incorporationNumber' => ['required','max:255'],
            'registerAuthority' => ['required','max:255'],
            'tradeNumber' => ['required','max:255'],
            'tinNumber' => ['required','max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => [  'required',
            'regex:/^(?:\+8801|8801|01)[0-9]{9}$/',
            'max:14'],
            'titleEnglish' => ['required','max:255'],
            'currency' => ['required'],
            'account_type' => ['required','max:255'],
            'name' => ['required','max:255'],
            'fathers_name' => ['required','max:255'],
            'mother_name' => ['required','max:255'],
            'dob' => ['required','max:255'],
            'nid' => ['required','max:255'],
            'gender' => ['required','max:255'],
            'presentDistrict' => ['required', 'string', 'max:255'],
            'presentThana' => ['required', 'string', 'max:255'],
            
            'attachment' => ['required', 'mimetypes:application/pdf'],
            'signature' => ['required', 'mimetypes:image/jpeg,image/png,image/jpg'],
        ]);


        $att = time().'.'.$request->file('attachment')->getClientOriginalExtension();
        $path = $request->file('attachment')->storeAs('attachment',$att,'public');
      
        $signImg = time().'.'.$request->file('signature')->getClientOriginalExtension();
        $signPath = $request->file('signature')->storeAs('signature',$signImg,'public');

        $account = Account::create([
            'bank_id' => $request->bank_id,
            'country_id' => $request->country_id,
            'branch_id' => $request->branch_id,
            'thana_id' => $request->thana_id,
            'branchCode' => $request->branchCode,
            'bank_id' => $request->bank_id,
            'district_id' => $request->district_id,
            'incorporationNumber' => $request->incorporationNumber,
            'registerAuthority' => $request->registerAuthority,
            'incorporationDate' => $request->incorporationDate,
            'registerAddress' => $request->registerAddress,
            'tradeNumber' => $request->tradeNumber,
            'expiredDate' => $request->expiredDate,
            'issuingAuthority' => $request->issuingAuthority,
            'tinNumber' => $request->tinNumber,
            'tradeDate' => $request->tradeDate,
            'officeDistrict' => $request->officeDistrict,
            'officeThana' => $request->officeThana,
            'officeAddress' => $request->officeAddress,
            'email' => $request->email,
            'phone' => $request->phone,
            'titleBangla' => $request->titleBangla,
            'titleEnglish' => $request->titleEnglish,
            'entity' => $request->entity,
            'account' => $request->account,
            'currency' => $request->currency,
            'account_type' => $request->account_type,
            'business_sector' => $request->business_sector,
            'sub_category' => $request->sub_category,
            'name' => $request->name,
            'fathers_name' => $request->fathers_name,
            'mother_name' => $request->mother_name,
            'spouse_name' => $request->spouse_name,
            'source_fund' => $request->source_fund,
            'monthlyIncome' => $request->monthlyIncome,
            'nid' => $request->nid,
            'dob' => $request->dob,
            'relationorg' => $request->relationorg,
            'personalTin' => $request->personalTin,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'occupation' => $request->occupation,
            'presentDistrict' => $request->presentDistrict,
            'presentThana' => $request->presentThana,
            'presenAddress' => $request->presenAddress,
            'prsentEmail' => $request->prsentEmail,
            'presentphone' => $request->presentphone,
            'parmanentDistrict' => $request->parmanentDistrict,
            'permanentThana' => $request->permanentThana,
            'permanentAddress' => $request->permanentAddress,
            'permanentEmail' => $request->permanentEmail,
            'permanentPhone' => $request->permanentPhone,
            'attachment' => $path,
            'signature' => $signPath,
        ]);

        if(empty($account)){
            return redirect()->back()->withInput();
        }
        return redirect()->route('account.list')->with('success', __('Successfully created'));

    }

    public function edit(Request $request){

        $banks = Bank::get();
        $countries = Country::get();
        $districts = District::get();
        $businesses = BusinessSector::get();

        $data = Account::with('thanaByDistrict','branches','districtByCountry','subCategoryByBusiness')->Where('id',$request->id)->first();
       return view ('account.edit',['data'=> $data, 'banks'=>$banks,'countries'=>$countries,'districts'=>$districts,'businesses'=>$businesses]);

    }

    public function update(Request $request,$id){
        $account = Account::find($id);
        $path = '';
        $signPath = '';
        $attachmentFile = $request->file('attachment');

        if($attachmentFile){
            $att = time().'.'.$request->file('attachment')->getClientOriginalExtension();
            $path = $request->file('attachment')->storeAs('attachment',$att,'public');
        }
        else{
            $path = $account->attachment;
        }

        $signatureFile = $request->file('signature');
        if($signatureFile){

            $signImg = time().'.'.$request->file('signature')->getClientOriginalExtension();
            $signPath = $request->file('signature')->storeAs('signature',$signImg,'public');
            
        }
        else{
            $signPath = $account->signature;
        }
      
        if ($account) {
            $account->update([
                'bank_id' => $request->bank_id,
                'country_id' => $request->country_id,
                'branch_id' => $request->branch_id,
                'thana_id' => $request->thana_id,
                'branchCode' => $request->branchCode,
                'bank_id' => $request->bank_id,
                'district_id' => $request->district_id,
                'incorporationNumber' => $request->incorporationNumber,
                'registerAuthority' => $request->registerAuthority,
                'incorporationDate' => $request->incorporationDate,
                'registerAddress' => $request->registerAddress,
                'tradeNumber' => $request->tradeNumber,
                'expiredDate' => $request->expiredDate,
                'issuingAuthority' => $request->issuingAuthority,
                'tinNumber' => $request->tinNumber,
                'tradeDate' => $request->tradeDate,
                'officeDistrict' => $request->officeDistrict,
                'officeThana' => $request->officeThana,
                'officeAddress' => $request->officeAddress,
                'email' => $request->email,
                'phone' => $request->phone,
                'titleBangla' => $request->titleBangla,
                'titleEnglish' => $request->titleEnglish,
                'entity' => $request->entity,
                'account' => $request->account,
                'currency' => $request->currency,
                'account_type' => $request->account_type,
                'business_sector' => $request->business_sector,
                'sub_category' => $request->sub_category,
                'name' => $request->name,
                'fathers_name' => $request->fathers_name,
                'mother_name' => $request->mother_name,
                'spouse_name' => $request->spouse_name,
                'source_fund' => $request->source_fund,
                'monthlyIncome' => $request->monthlyIncome,
                'nid' => $request->nid,
                'dob' => $request->dob,
                'relationorg' => $request->relationorg,
                'personalTin' => $request->personalTin,
                'gender' => $request->gender,
                'nationality' => $request->nationality,
                'occupation' => $request->occupation,
                'presentDistrict' => $request->presentDistrict,
                'presentThana' => $request->presentThana,
                'presenAddress' => $request->presenAddress,
                'prsentEmail' => $request->prsentEmail,
                'presentphone' => $request->presentphone,
                'parmanentDistrict' => $request->parmanentDistrict,
                'permanentThana' => $request->permanentThana,
                'permanentAddress' => $request->permanentAddress,
                'permanentEmail' => $request->permanentEmail,
                'permanentPhone' => $request->permanentPhone,
                'attachment' => $path,
                'signature' => $signPath,
            ]);
        
            return redirect()->route('account.list');
        } else {
            return redirect()->back()->withInput();
        }        

    }

    public function branches(Request $request){
        $record = Branch::orderby('name','asc')->select('id','name','code')
        ->where('bank_id',$request->id)->get();
        return response()->json($record);
    }

    public function district(Request $request){
        $record = District::orderby('name','asc')->select('id','name')
        ->where('country_id',$request->id)->get();
        return response()->json($record);
    }

    public function thanas(Request $request){
        $record = Thana::orderby('name','asc')->select('id','name')
        ->where('district_id',$request->id)->get();
        return response()->json($record);
    }

    public function category(Request $request){
        $record = SubCategory::orderby('name','asc')->select('id','name')
        ->where('business_id',$request->id)->get();
        return response()->json($record);
    }
}
