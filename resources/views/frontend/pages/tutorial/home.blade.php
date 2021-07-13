@extends('frontend.layouts.default',[
'title'=>'Index',
'currentClass'=>'index',
'keywords'=>'Learn Laravel',
'description'=>'Learn laravel',
])
@section('content')
    <img src="{{ asset('public/img/Photo_1625676219364.jpg') }}" alt="" class="image">

    <h4 style="text-decoration: none; text-align: center;">
        এটি কখনও একটি পরিপূর্ণ ডকুমেন্টেশন নয়।
        শুধুমাত্র পড়ানোর সুবিধার্তে এটি তৈরি করা হয়েছে|
    </h4>
    <h4 style="text-decoration: none; text-align: center;">
        পরিপূর্ণ ডকুমেন্টেশনের জন্য <a href="https://laravel.com/" target="__blank">Laravel</a> এর ডকুমেন্টেশন
        ফলো করতে অনুরোধ করা হচ্ছে।
    </h4>

    <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_1jibotah.json" background="transparent" speed=".5"
        loop autoplay></lottie-player>
@endsection
