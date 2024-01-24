@extends('layouts.home')

@section('title')
    its_iQ | Portfolio
@endsection

@section('content')

    <section class="bg-ungu-gelap flex flex-wrap justify-center items-center w-full h-full m-auto overflow-clip font-poppins py-[60px]" id="home">
        <div class="left-content py-36 w-2/4 flex">
            <div class="pr-5 pb-10">
                <h1 class="title font-bold text-5xl">Hi there,</h1>
                <h2 class="font-semibold text-blue-200">tes</h2>
                <h1 class="text-light-sage-green font-bold text-5xl">i'm Rizqy.</h1>
                <h1 class="font-bold text-5xl pt-5"> a Web Developer </h1>
                <div class="pt-1">
                    <p class="text-putih opacity-75 text-lg text-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam tempore nulla numquam voluptatem eaque adipisci expedita dignissimos eveniet, deleniti rerum praesentium sed necessitatibus maxime obcaecati in. Excepturi porro quibusdam numquam officia magni fuga possimus exercitationem necessitatibus eos rem magnam quam, eligendi repellendus debitis ipsa sit asperiores sed cum repellat dignissimos voluptate suscipit incidunt? Non quod eveniet nobis illum repellat nam ullam necessitatibus? Eum voluptas consequuntur dolores corporis eveniet pariatur necessitatibus et, ut illo fugiat praesentium placeat hic saepe repudiandae, perspiciatis quisquam voluptatem nihil velit commodi laboriosam impedit libero tempore dolorum! Ipsa deleniti repellat corporis iste dolor dicta ipsam amet similique!</p>
                </div>
                <div class="pt-5">
                    <a href="#_" class="relative inline-flex items-center px-6 py-3 overflow-hidden text-md font-medium border-2 border-biru-terang rounded-full hover:text-putih group ">
                    <span class="absolute left-0 block w-full h-0 transition-all bg-light-sage-green opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-420 ease"></span>
                    <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-[20px] ease">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                    <span class="relative">More About Me</span>
                    </a>
                </div>
            </div>

        </div>
        <div class="right-content flex justify-center pt-16 pl-5 md:pl-10 md:pb-5 lg:pb-10">
            <div class="rounded-3xl bg-transparent">
                <img class="w-[448px] flex p-5 rounded-full" src="" alt="">
            </div>
        </div>
    </section>

    <section class="font-poppins bg-hitam w-full flex-wrap m-auto items-center pt-5 pb-20">
        <div class="w-[250px] m-auto py-2 px-5 ring-2 ring-biru-terang rounded-full">
            <h1 class="text-putih font-bold text-xl text-center ">Skills & Knowledges</h1>
        </div>

        <div class="order-1 flex flex-wrap pt-4">
            <h1></h1>
            <div class="w-[300px] ml-4 px-3 py-3 ring-2 ring-ungu-gelap rounded-3xl flex justify-between gap-3">
                <div class="m-auto">
                    <h1 class="text-putih text-center animate-pulse">Basic</h1>
                </div>
                <div class="hover:translate-x-2 transition-transform ease-in duration-150">
                    <img class="w-[62px]" src="{{ asset('img/HTML5_Badge.svg') }}" alt="html_logo">
                </div>
                <div class=" hover:-translate-x-2 transition-all ease-in duration-150">
                    <img class="w-[62px]" src="{{ asset('img/CSS3_logo.svg') }}" alt="css_logo">
                </div>
            </div>
        </div>

        <div class="order-1 w-[300px] flex flex-wrap ml-4 py-4 ring-2 ring-ungu-gelap rounded-3xl gap-3">
            <div class="flex-col justify-center m-auto">
                <h1 class="text-putih text-center animate-pulse">Programing Language</h1>
            </div>

            <div class="w-[300px] ml-4 px-3 py-3 flex justify-between m-auto">
                <div class="hover:translate-x-2 transition-transform ease-in duration-150 m-auto">
                    <img class="w-[62px]" src="{{ asset('img/Unofficial_JavaScript_logo_2.svg') }}" alt="js_logo">
                </div>
                <div class="hover:-translate-x-2 transition-transform ease-in duration-150 m-auto">
                    <img class="" src="{{ asset('img/php-med-trans-light.gif') }}" alt="js_logo">
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="font-poppins bg-hitam w-full flex-wrap m-auto items-center pt-5 pb-20">
        <div class="w-[200px] m-auto pb-5 pt-5">
            <h1 class="text-putih font-bold text-xl text-center">Skills & Knowledge</h1>
        </div>

        <div class="order-1 justify-center">
            <div class="w-[100px] ml-4 pl-3 py-3 ring-2 ring-ungu-gelap rounded-3xl">
                <div class="hover:translate-x-2 transition-transform ease-in duration-150">
                    <img class="w-[62px] pb-2" src="{{ asset('img/HTML5_Badge.svg') }}" alt="">
                </div>
                <div class="hover:translate-x-2 transition-transform ease-in duration-150">
                    <img class="w-[62px] pt-2" src="{{ asset('img/CSS3_logo.svg') }}" alt="">
                </div>
                <div class="hover:translate-x-2 transition-transform ease-in duration-150">
                    <img class="w-[62px] pt-2" src="{{ asset('img/Unofficial_JavaScript_logo_2.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section> --}}

@endsection


