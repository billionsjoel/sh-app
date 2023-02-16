<section class="gallery" style="margin-left: 3rem;">
    <div class="title">
        <h1 class="text-center">Latest Books</h1>
        <div class="bks-border mb-4"></div>
    </div>
    <div class="___class_+?161___">
        <div class="row">
            @forelse ($covers as $cover)
                <div class="col-sm-4">
                    <div class="card" style="width: 20rem; margin-bottom:3rem;">
                        <img class="card-img-top" src="{{ url('images/bookcovers/' . $cover->image) }}"
                            alt="Card image cap" style="height: 100%; width: 100%; object-fit: contain">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cover->title }}</h5>
                            <a href="#" class="i small">Author : <span
                                    class="text-info">{{ $cover->author }}</span></a>
                            <a href="{{ url('/covers?id=' . $cover->id) }}"
                                class="btn btn-primary btn-block">Interested</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-sm-3">
                    There are no book covers at the moment.
                </div>
            @endforelse
        </div>

        <div class="cta p-4 text-center w-100">
            <div class="btn border-bottom text-center text-primary">
                <a href="{{ url('/covers') }}">See all books <svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-arrow-right-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z" />
                    </svg> </a>
            </div>
        </div>
    </div>
</section>
