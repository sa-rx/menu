@extends('layouts.app')
@section('title', ' لوحة التحكم ')

@section('content')

<section class="page-section cta container rounded">
            <div class="">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                            
                        <div class="cta-inner bg-faded text-center rounded">
                            <div class="row ">

                        


                                <div class="col-md-3">
                                    <a href="{{route('food.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-coffee fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >الاصناف </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('categories.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-tablets fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >الفئات </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('abouts.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-address-card fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >بيانات من نحن </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('contacts.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >تواصل معنا </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('opinions.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-lightbulb fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >الاراء </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('users.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-users  fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" > ادارة المستخدمين </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('roles.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-atom fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" > ادارة ادوار المستخدمين </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('offers.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-tags fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >العروض </p>
                                    </div>
                                </div>





                                </div>  




                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
