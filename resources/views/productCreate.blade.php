<x-app-layout>
    <x-slot name="header">
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="productCreate-container">
                    @if(session('message'))
                    <div class="flash">
                        {{session('message')}}
                    </div>
                    @endif
                    @if($errors->any())
                    <ul class="error">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <h1>商品登録ページ</h1>
                    <form action="{{route('shops.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="title-wrap">商品タイトル : <input type="text" name="name" placeholder="商品タイトル" value="{{old('name')}}"></div>
                        <div class="img-wrap">商品画像 : <input type="file" name="imgpath" accept="image"></div>
                        <div class="detail-wrap">商品説明 : <textarea type="text" name="detail" cols="30" rows="10" placeholder="商品説明">{{old('detail')}}</textarea></div>
                        <div class="fee-wrap">値段 : <input type="text" name="fee" placeholder="10000" value="{{old('fee')}}">円</div>
                        <div class="submit-wrap"><input type="submit" value="登録する"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>