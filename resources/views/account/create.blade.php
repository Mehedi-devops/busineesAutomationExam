<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acoount</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
        }
        #grad1 {
            background-color: : #9C27B0;
            background-image: linear-gradient(120deg, #E5E4E2, #dddddd);
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative;
        }

        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }

        Blue Buttons #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        .fs-title {
            font-size: 15px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 50%;
            float: left;
            position: relative;
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue;
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        .fit-image {
            width: 100%;
            object-fit: cover;
        }

        .border-container {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="container-fluid" id="grad1">
            <div>
                <div class="row ">
                    <div class="mt-4">
                        <a class="btn btn-success" href="{{ route('dashboard') }}">Dashboard</a>
                        <a class="btn btn-success" href="{{ route('account.list') }}">Look up list</a>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-0">
                <div class="col-11 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h1><strong>Application for corporate bank Account</p>
                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form id="msform" action="{{ route('account.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="account"><strong>Account</strong></li>
                                                <li id="personal"><strong>Attchment</strong></li>

                                            </ul>
                                            <!-- fieldsets -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h1 class="fs-title">General Information</h1>
                                                    <div class="row">
                                                        <div class="col-6 mt-3">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span for="bank_id" class="h6">Name of
                                                                        Bank</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="bank_id" id="select_bank"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select Bank</option>

                                                                        @foreach ($banks as $bank)
                                                                            <option value="{{ $bank->id }}">
                                                                                {{ $bank->name }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                    @if ($errors->has('bank_id'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('bank_id') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span for="branch_id" class="h6">Branch
                                                                        name</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="branch_id" id="bank_branch"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select Branch</option>

                                                                    </select>
                                                                    @if ($errors->has('branch_id'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('branch_id') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="branchCode">Branch
                                                                        code</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input id="branchCode" name="branchCode"
                                                                        class="form-control mt-3" readonly />
                                                                    @if ($errors->has('branchCode'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('branchCode') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mt-2">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="country_id">Country</span>
                                                                </div>
                                                                <div class="col-6">

                                                                    <select name="country_id" id="select_country"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select Country
                                                                        </option>
                                                                        @foreach ($countries as $country)
                                                                            <option value="{{ $country->id }}">
                                                                                {{ $country->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('country_id'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('country_id') }}
                                                                        </div>
                                                                    @endif
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="district_id">Name of
                                                                        District</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="district_id" id="select_district"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">

                                                                    </select>
                                                                    @if ($errors->has('district_id'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('district_id') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="thana_id">Thana</span>
                                                                </div>
                                                                <div class="col-6">

                                                                    <select name="thana_id" id="select_thana"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                    </select>
                                                                    @if ($errors->has('thana_id'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('thana_id') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Company registration info --}}
                                                <div class="form-card">
                                                    <h1 class="fs-title">Company registration info</h1>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="incorporationNumber">Incorporation
                                                                        Number</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="incorporationNumber" />
                                                                    @if ($errors->has('incorporationNumber'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('incorporationNumber') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="registerAuthority">Registration
                                                                        Authority</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="mt-4 form-control border rounded"
                                                                        name="registerAuthority" />
                                                                    @if ($errors->has('registerAuthority'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('registerAuthority') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="incorporationDate">Incorporation
                                                                        Date</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="date"
                                                                        class="form-control border rounded mt-4"
                                                                        name="incorporationDate" />
                                                                    @if ($errors->has('incorporationDate'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('incorporationDate') }}
                                                                        </div>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <span class="h6"
                                                                    for="registerAddress">Registration
                                                                    Address</span>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text"
                                                                    class="form-control border rounded mt-4"
                                                                    name="registerAddress" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Trade Lisence info --}}
                                                <div class="form-card">
                                                    <h1 class="fs-title">Trade Lisence info</h1>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="tradeNumber">Trade
                                                                        Lisence
                                                                        Number</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="tradeNumber" />
                                                                    @if ($errors->has('tradeNumber'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('tradeNumber') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="expiredDate">Expired
                                                                        Date</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="date"
                                                                        class="form-control border rounded mt-4"
                                                                        name="expiredDate" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="issuingAuthority">Issuing Authority</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="issuingAuthority" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="tradeDate">Date of Trade
                                                                        Lisence
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="date"
                                                                        class="form-control border rounded mt-4"
                                                                        name="tradeDate" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Tax payer Identification --}}
                                                <div class="form-card">
                                                    <h1 class="fs-title">Taxpayer Identification</h1>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <span class="h6" for="tinNumber">Taxpayer
                                                                Identification
                                                            </span>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text"
                                                                class="form-control border rounded mt-4"
                                                                name="tinNumber" />
                                                            @if ($errors->has('tinNumber'))
                                                                <div class="alert alert-danger h6">
                                                                    {{ $errors->first('tinNumber') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Official Address --}}
                                                <div class="form-card">
                                                    <h1 class="fs-title">office Address</h1>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="officeDistrict">Name of
                                                                        District</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="officeDistrict" id="office_district"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select District
                                                                        </option>
                                                                        @foreach ($districts as $district)
                                                                            <option value="{{ $district->id }}">
                                                                                {{ $district->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="officeThana">Thana</span>
                                                                </div>
                                                                <div class="col-6">

                                                                    <select name="officeThana" id="office_thana"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="email">Email
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="email"
                                                                        class="form-control border rounded mt-4"
                                                                        name="email" />
                                                                    @if ($errors->has('email'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('email') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="phone">Phone
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="phone" />
                                                                    @if ($errors->has('phone'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('phone') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <span class="h6" for="officeAddress">
                                                                        Address</span>
                                                                </div>
                                                                <div class="col-9">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="officeAddress" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Account Information --}}
                                                <div class="form-card">
                                                    <h1 class="fs-title">Account Information</h1>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="titleEnglish">Title of
                                                                        Account(English)
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="titleEnglish" />
                                                                    @if ($errors->has('titleEnglish'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('titleEnglish') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for=" titleBangla">title of
                                                                        Account (Bangla)
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="titleBangla" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="account">Nature of
                                                                        account
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="account" id="account"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select account
                                                                        </option>
                                                                        <option value="1">Super account </option>
                                                                        <option value="2"> Normal account</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="entity">Entity Type
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="entity" id="entity"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select entity
                                                                        </option>
                                                                        <option value="1">entity 1</option>
                                                                        <option value="2">entity 2</option>

                                                                    </select>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="currency">currency
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="currency" id="currency"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select currency
                                                                        </option>
                                                                        <option value="1">USD</option>
                                                                        <option value="2">BDT</option>

                                                                    </select>
                                                                    @if ($errors->has('currency'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('currency') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="account_type">Account
                                                                        Type
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="account_type" id="account_type"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select account type
                                                                        </option>
                                                                        <option value="1">Current Account</option>
                                                                        <option value="2">FCAC</option>

                                                                    </select>
                                                                    @if ($errors->has('account_type'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('account_type') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="business_sector">Business Sector
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="business_sector"
                                                                        id="business_sector" class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select Business
                                                                        </option>
                                                                        @foreach ($businesses as $business)
                                                                            <option value="{{ $business->id }}">
                                                                                {{ $business->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="sub_category">Sub
                                                                        category
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="sub_category" id="sub_category"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Account operating person information --}}
                                                <div class="form-card">
                                                    <h1 class="fs-title">Account operating person information</h1>
                                                    <div class="row">
                                                        <div class="col-6">

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="name">Name
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="name" />
                                                                    @if ($errors->has('name'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('name') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="fathers_name">Fathers
                                                                        Name
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="fathers_name" />
                                                                    @if ($errors->has('fathers_name'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('fathers_name') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="mother_name">Mother Name
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="mother_name" />
                                                                    @if ($errors->has('mother_name'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('mother_name') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="spouse_name">Spouse Name
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="spouse_name" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="dob">Date of Birth
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="date"
                                                                        class="form-control border rounded mt-4"
                                                                        name="dob" />
                                                                    @if ($errors->has('dob'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('dob') }}
                                                                        </div>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="source_fund">Source of
                                                                        Fund
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="source_fund" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="monthlyIncome">Monthly
                                                                        Income
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="monthlyIncome" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="nid">NID Number
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="nid" />
                                                                    @if ($errors->has('nid'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('nid') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="relationorg">Relation
                                                                        with organisation
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="relationorg" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="personalTin">Tin
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="personalTin" />
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="gender">Gender
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="gender" id="gender"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select Gender</option>
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                        <option value="3">Other</option>
                                                                    </select>
                                                                    @if ($errors->has('gender'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('gender') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="nationality">Nationality
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="nationality" id="nationality"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select nationality
                                                                        </option>
                                                                        <option value="1">Bangladeshi</option>
                                                                        <option value="2">Foreign</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="occupation">Occupation
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="occupation" id="occupation"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select Occupation
                                                                        </option>
                                                                        <option value="1">occupation 1</option>
                                                                        <option value="2">occupation 2</option>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Present Address --}}

                                                <div class="form-card">
                                                    <h1 class="fs-title">Present Address</h1>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="presentDistrict">Name
                                                                        of District</span>

                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="presentDistrict"
                                                                        id="present_district" class="form-select mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select District
                                                                        </option>
                                                                        @foreach ($districts as $district)
                                                                            <option value="{{ $district->id }}">
                                                                                {{ $district->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @if ($errors->has('present_district'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('present_district') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="presenTthana">Thana</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <select name="presentThana" id="present_thana"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">

                                                                    </select>
                                                                    @if ($errors->has('presentThana'))
                                                                        <div class="alert alert-danger h6">
                                                                            {{ $errors->first('presentThana') }}
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="prsentEmail">Email
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="email"
                                                                        class="form-control border rounded mt-4"
                                                                        name="prsentEmail" />

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="presentphone">Phone
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="presentphone" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <span class="h6" for="presenAddress">
                                                                        Address</span>
                                                                </div>
                                                                <div class="col-9">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4 "
                                                                        name="presenAddress" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Parmanent Address --}}
                                                <div class="form-card">
                                                    <h1 class="fs-title">Parmanent Address</h1>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="parmanentDistrict">Name
                                                                        of District</span>
                                                                </div>
                                                                <div class="col-6">

                                                                    <select name="parmanentDistrict"
                                                                        id="permanent_district"
                                                                        class="form-select  mt-3"
                                                                        aria-label="Default select example">
                                                                        <option disabled selected>Select District
                                                                        </option>
                                                                        @foreach ($districts as $district)
                                                                            <option value="{{ $district->id }}">
                                                                                {{ $district->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6"
                                                                        for="permanentThana">Thana</span>
                                                                </div>
                                                                <div class="col-6">

                                                                    <select name="permanentThana" id="permanent_thana"
                                                                        class="form-select mt-3"
                                                                        aria-label="Default select example">

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="permanentEmail">Email
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="email"
                                                                        class="form-control border rounded mt-4"
                                                                        name="permanentEmail" />

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <span class="h6" for="permanentPhone">Phone
                                                                    </span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="permanentPhone" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <span class="h6" for="permanentAddress">
                                                                        Address</span>
                                                                </div>
                                                                <div class="col-9">
                                                                    <input type="text"
                                                                        class="form-control border rounded mt-4"
                                                                        name="permanentAddress" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="button" name="next" class="btn next btn-primary"
                                                    value="Next Step" />

                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h1 class="fs-title">Attachment</h1>

                                                    <div class="row">
                                                        <div class="col-2 ">
                                                            <span class="h6" for="permanentAddress">
                                                                Attachment</span>
                                                        </div>
                                                        <div class="col-6">
                                                            <input type="file"
                                                                class="form-control border rounded mt-4"
                                                                name="attachment" />

                                                        </div>
                                                        @if ($errors->has('attachment'))
                                                            <div class="alert alert-danger h6">
                                                                {{ $errors->first('attachment') }}
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col-2">
                                                            <span class="h6" for="signature">
                                                                Signature</span>
                                                        </div>
                                                        <div class="col-6 mt-2">
                                                            <input class="form-control" type="file"
                                                                name="signature" />

                                                        </div>
                                                        @if ($errors->has('signature'))
                                                            <div class="alert alert-danger h6">
                                                                {{ $errors->first('signature') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <input type="button" name="previous"
                                                    class="previous btn btn-secondary p-2" value="Previous" />
                                                <button class="btn btn-success p-2" type="submit"
                                                    value="Submit">Submit</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                next_fs.show();
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                previous_fs.show();
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });

        // dropdown
        $(document).ready(function() {
            $('#select_bank').change(function() {
                var id = $(this).val();
                $('#bank_branch option:not(:first)').remove();
                $.ajax({
                    url: '/getbranch/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response != null) {
                            let html = '<option disabled selected>Select Branch</option>'
                            for (let i = 0; i < response.length; i++) {
                                html += '<option value="' + response[i].id + '" code="' +
                                    response[i].code + '">' + response[i].name + '</option>'
                            }
                            $('#bank_branch').html(html)
                        }
                    }
                })
            })
            $('#bank_branch').change(function() {
                $('#branchCode').val($('option:selected', this).attr('code'))
            })
        })
        // for country
        $(document).ready(function() {
            $('#select_country').change(function() {
                var id = $(this).val();
                $('#select_district option:not(:first)').remove();
                $.ajax({
                    url: '/getDistrict/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response != null) {
                            let html = '<option disabled selected>Select District</option>'
                            for (let i = 0; i < response.length; i++) {
                                html += '<option value="' + response[i].id + '">' + response[i]
                                    .name + '</option>'
                            }
                            $('#select_district').html(html)
                        }
                    }
                })
            })
        })
        $(document).ready(function() {
            $('#select_district').change(function() {
                var id = $(this).val();
                console.log(id);
                $('#select_thana option:not(:first)').remove();
                $.ajax({
                    url: '/getThanas/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response != null) {
                            let html = '<option disabled selected>Select Thana</option>'
                            for (let i = 0; i < response.length; i++) {
                                html += '<option value="' + response[i].id + '">' + response[i]
                                    .name + '</option>'
                            }
                            $('#select_thana').html(html)
                        }
                    }
                })
            })
        })
        // business sector
        $(document).ready(function() {
            $('#business_sector').change(function() {
                var id = $(this).val();
                $('#sub_category option:not(:first)').remove();
                $.ajax({
                    url: '/getCategory/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response != null) {
                            let html = '<option disabled selected>Select Category</option>'
                            for (let i = 0; i < response.length; i++) {
                                html += '<option value="' + response[i].id + '">' + response[i]
                                    .name + '</option>'
                            }
                            $('#sub_category').html(html)
                        }
                    }
                })
            })
        })

        // office district
        $(document).ready(function() {
            $('#office_district').change(function() {
                var id = $(this).val();
                console.log(id);
                $('#office_thana option:not(:first)').remove();
                $.ajax({
                    url: '/getThanas/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response != null) {
                            let html = '<option disabled selected>Select Thana</option>'
                            for (let i = 0; i < response.length; i++) {
                                html += '<option value="' + response[i].id + '">' + response[i]
                                    .name + '</option>'
                            }
                            $('#office_thana').html(html)
                        }
                    }
                })
            })
        })
        // present district
        $(document).ready(function() {
            $('#present_district').change(function() {
                var id = $(this).val();
                console.log(id);
                $('#present_thana option:not(:first)').remove();
                $.ajax({
                    url: '/getThanas/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response != null) {
                            let html = '<option disabled selected>Select Thana</option>'
                            for (let i = 0; i < response.length; i++) {
                                html += '<option value="' + response[i].id + '">' + response[i]
                                    .name + '</option>'
                            }
                            $('#present_thana').html(html)
                        }
                    }
                })
            })
        })
        // permanent district
        $(document).ready(function() {
            $('#permanent_district').change(function() {
                var id = $(this).val();
                console.log(id);
                $('#permanent_thana option:not(:first)').remove();
                $.ajax({
                    url: '/getThanas/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response != null) {
                            let html = '<option disabled selected>Select Thana</option>'
                            for (let i = 0; i < response.length; i++) {
                                html += '<option value="' + response[i].id + '">' + response[i]
                                    .name + '</option>'
                            }
                            $('#permanent_thana').html(html)
                        }
                    }
                })
            })
        })
    </script>

</body>

</html>
