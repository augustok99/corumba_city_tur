<form action="{{ url('/ratings/' . $rating->id . '/like') }}" method="POST" id="like-form-{{ $rating->id }}">
    @csrf
    <button type="submit" class="like-button absolute mt-1" data-rating-id="{{ $rating->id }}">
        <img class="w-9 cursor-pointer hover:scale-110" id="heart-image-{{ $rating->id }}"
            src="{{ asset($rating->liked ? 'images/heart_red.png' : 'images/heart.png') }}" alt="Like">
    </button>
</form>