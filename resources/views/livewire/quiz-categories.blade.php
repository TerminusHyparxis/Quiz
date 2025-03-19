<div>
<div x-data="{ selected: @entangle('selectedCategory') }" class="container">
    <h1 class="title">Choose a Quiz Category</h1>
    <div class="categories">
        @foreach ($categories as $category)
            <div 
                wire:click="selectCategory({{$category['id']}})"
                x-bind:class="{ 'selected': selected === {{ $category['id'] }} }"
                class="category-card"
                x-on:mouseover="$event.target.style.transform = 'scale(1.05)'"
                x-on:mouseout="$event.target.style.transform = 'scale(1)'"
            >
                {{ $category['name'] }}
            </div>
        @endforeach
    </div>

    @if ($selectedCategory)
        <p>You selected category ID: {{ $selectedCategory }}</p>
    @endif
</div>

<!-- <div>
<div x-data="{ selected: $wire.entangle('selectedCategory') }" class="container">
    <h1 class="title">Choose a Quiz Category</h1>
    <div class="categories">
        @foreach ($categories as $category)
            <div 
                wire:click="selectCategory({{ $category['id'] }})"
                x-bind:class="{ 'selected': selected === {{ $category['id'] }} }"
                class="category-card"
                x-on:mouseover="$event.target.style.transform = 'scale(1.05)'"
                x-on:mouseout="$event.target.style.transform = 'scale(1)'"
            >
                {{ $category['name'] }}
            </div>
        @endforeach
    </div>

    @if ($selectedCategory)
        <p>You selected category ID: {{ $selectedCategory }}</p>
    @endif
</div> -->