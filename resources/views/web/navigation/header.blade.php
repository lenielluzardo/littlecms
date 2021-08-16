<!-- ===== H E A D E R ===== -->

<header id="head01" class="header">
    <div class="header_heading">
       
        @include('web.partial.brand')

        <div class="header_heading-navicon"> <i class="fa fa-bars"></i> </div>

    </div>

    @include('web.navigation.modules')

</header>

<script>
    $('.header_heading-navicon').on('click', function(){
        
        let $header = $('#head01');
        // $header.animate({height});
        let $navigation = $('.navigation-modules');
        $navigation.animate(5000);

        if($header.height() > 100 )
        {
            $header.height('4em');
            $navigation.toggle();
        }
        else
        {
            $header.height('initial');
            // $navigation.toggle();
            $navigation.css('display', 'grid');
        }

    })
</script>