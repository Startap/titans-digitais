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

    <p class="headline__call text__center">
        Domine o verdadeiro jogo do Marketing Digital e comece a prosperar por
        meio das <strong class="text__accent">três profissões mais valorizadas e cobiçadas</strong> do Digital.
    </p>

    <p>
        <span class="evento__online animation__evento_online">Evento 100% online e gratuito</span>
        <span class="evento__online">
            <span class="iconify" data-icon="bi:calendar-check-fill"></span>
            7 de junho
        </span>
    </p>

    <!-- Form rendering -->
    <?php
        $formName = $_SERVER['REQUEST_URI'] === '/jogo-mktdigital' ? 'jogo_marketing_form_a' : 'jogo_marketing_form_b';
    ?>
    <form class="form__control" name="<?php echo $formName; ?>">
        <div class="input__group">
            <label for="__name">Nome</label>
            <input class="input__control" type="text" id="__name" placeholder="Nome e Sobrenome">
        </div>
        <div class="input__group">
            <label for="__email">E-mail</label>
            <input class="input__control" type="email" id="__email" placeholder="email@email.com">
        </div>
        <div class="input__group">
            <label for="__phone">Telefone</label>
            <input class="input__control" type="phone" id="__phone" placeholder="99 999 999 999">
        </div>

        <div class="input__group">
            <button type="submit">QUERO SER TITÃ DIGITAL</button>
        </div>
    </form>
</article>