@extends('layout.layout')
@section('content')
    <br>
    <br>
    <br>
    <br>
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class=" text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">
                <div class="text-center pb-6">
                    <h1 class="text-3xl">Contact Me!</h1>

                    <p class="text-gray-300">
                        Fill up the form below to send us a message.
                    </p>
                </div>

                <form action="https://formsubmit.co/413e3ca5fb6617e6efc93dc8f47da85d" method="POST">
                    <!--Config -->
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Name" name="name" required="">

                    <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="email" placeholder="Email" name="email" required="">

                    <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Subject" name="_subject" required="">

                    <textarea
                        class="shadow mb-4 min-h-0 appearance-none border rounded h-64 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Type your message here..." name="message" required=""
                        style="height: 121px;"></textarea>


                    <input
                        class="float-left shadow bg-indigo-600 hover:bg-indigo-700 text-white w-half font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" value="Send ➤"><input
                        class="float-right shadow bg-red-600 hover:bg-red-700 text-white w-half font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="reset">


                    <input type="hidden" name="_next" value="https://codewhiteweb.cf/thanks">
                </form>
            </div>
    </div>
    <br>
    <br>
@endsection


