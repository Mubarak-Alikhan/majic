@extends('layouts.main') @section('main')
@section('title', 'aboutpage')
<section class="py-md-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-down">
                <div class="element position-relative p-md-4 p-2">
                    <img
                        src="{{ asset('images/banner-img.png') }}"
                        class="w-100"
                        alt=""
                    />
                </div>
            </div>
            <div class="col-md-8" data-aos="fade-down">
                <div class="font-1 py-3">
                    <p class="fs-4 mb-0 fw-600">About</p>
                    <p class="text-dark display-5 mt-0 fw-600">
                        maJiC Jewelry Design
                    </p>
                    <p>
                        mAJiC jewelry design is currently a 1-person operation
                        run by me, Majic. After a long career in the corporate
                        world, I downshifted and began working at JoAnn Fabric
                        and Crafts. Immersed in a creative atmosphere, I
                        unlocked a passion for making jewelry in 2018 and bought
                        the beads that became the California fire set in 2019.
                        I’ve found inspiration in beads themselves, in nature,
                        and in thinking “Why hasn’t anybody done this? ” for my
                        works. I am fond of the colors purple and pink in my
                        formal winter jewelry sets, and I plan to use more than
                        two colors per set in 2022 and beyond.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
