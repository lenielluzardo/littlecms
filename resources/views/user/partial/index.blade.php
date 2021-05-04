
<section class="sub-content-container box-container archive-container">
    @include('controls.filter')

    <section>
        <ul class="archive-list">

            @foreach($items as $item)

            <li class="archive-list-item">

                @include('controls.preview-item', ['item' => $item])


            </li>
            @endforeach
        </ul>
    </section>

    @include('controls.paging')

</section>

