@extends('layout.layout')
<br>
<section class="bg-white border-b py-8" style="background-color: transparent;">
    <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            About us
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    InterviewPro
                </h3>
                <p class="text-gray-600 mb-8">
                    Is a space that connects
                    candidates and the company

                    If you are looking for a job,
                    you can apply to our company
                    by accessing this link.
                    <br />
                    <br />
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-6">
                <img class="w-full md:w-4/5 z-50"  src="{{asset('Landing-Page-master/aboutus.jpg')}}"/>

            </div>

</section>
