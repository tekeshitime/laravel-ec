<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="shop-container">
                    <h1>商品一覧</h1>
                    <div class="item-container">
                        @foreach($stocks as $stock)
                        <div class="item">
                            <p>{{$stock->name}}<br>{{$stock->fee}}円</p>
                            <div><img src="{{asset('storage/images/'.$stock->imgpath)}}" alt=""></div>
                            <p>{{$stock->detail}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>