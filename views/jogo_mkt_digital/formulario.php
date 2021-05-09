<article class="article">
    <h1 class="article__header">O JOGO DO MARKETING DIGITAL</h1>

    <?php
    $htmlEmbedParamenters = ['autoplay=0', 'controls=0', 'disablekb=1', 'fs=0', 'modestbranding=1', 'rel=0', 'showinfo=0'];
    $htmlSalesVideoHtml = <<<htmlSalesVideoHtmlTemplate
                    <iframe 
                        width="699" 
                        height="393" 
                        src="https://www.youtube.com/embed/_2hB1YUErZ0?%parameters" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                htmlSalesVideoHtmlTemplate;
    $htmlSalesVideoHtml = str_replace('%parameters', implode("&", $htmlEmbedParamenters), $htmlSalesVideoHtml);
    ?>

    <div class="video__wrapper">
        <div class="video__iframe_container">
            <?php echo $htmlSalesVideoHtml; ?>
        </div>
    </div>

    <p>
        Domine o verdadeiro jogo do Marketing Digital e comece a prosperar por
        meio das <strong>três profissões mais valorizadas e cobiçadas</strong> do Digital.
    </p>

    <p>
        <span class="evento__online animation__evento_online">Evento 100% online e gratuito</span>
        <span class="evento__online">
            <span class="iconify" data-icon="bi:calendar-check-fill"></span>
            7 de junho
        </span>
    </p>

    <!-- Form rendering -->
    <div role="main" id="newtimes-formulario-leads-page-9cc80504cb28de1971aa"></div>
</article>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
    new RDStationForms('newtimes-formulario-leads-page-9cc80504cb28de1971aa', 'UA-154439101-1').createForm();
</script>