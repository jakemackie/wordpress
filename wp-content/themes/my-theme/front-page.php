<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="bg-slate-100">
    <?php get_template_part( 'parts/header' );  ?>

    <div class="mx-auto max-w-xs md:max-w-lg mt-10 md:mt-14 text-center">
        <h1 class="text-4xl md:text-6xl font-semibold text-slate-900">
            This is my startup idea or something
        </h1>
    </div>
    <div class="md:text-center mt-5 m-2.5 text-slate-700">
        <p class="font-normal text-lg md:text-xl">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam nec purus nec nunc ultricies lacinia.
        </p>
    </div>
    
    <?php get_template_part( 'parts/footer' );  ?>

</body>
</html>