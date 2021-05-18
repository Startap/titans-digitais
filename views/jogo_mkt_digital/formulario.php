<!-- Form rendering -->
<?php
$formName = $_SERVER['REQUEST_URI'] === '/jogo-mktdigital' ? 'jogo_marketing_form_a' : 'jogo_marketing_form_b';
?>

<article class="article">
    <section class="headline__container">
        <img src="/assets/images/titas_logo.png" alt="Titãs Digitais - O jogo do marketing digital">
        <h1 class="article__header">
            <small>O JOGO DO</small>
            <span>MARKETING DIGITAL</span>  
        </h1>
    </section>

    <?php
    $htmlEmbedParamenters = ['autoplay=0', 'controls=0', 'disablekb=1', 'fs=0', 'modestbranding=1', 'rel=0', 'showinfo=0'];
    $htmlSalesVideoHtml = <<<htmlSalesVideoHtmlTemplate
                <div class="video__iframe_container">
                    <iframe 
                        width="699" 
                        height="393" 
                        src="https://www.youtube.com/embed/%videoId?%parameters" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                </div>
                htmlSalesVideoHtmlTemplate;

    $htmlSalesVideoHtml = str_replace('%videoId', $_ENV['YOUTUBE_ID'], $htmlSalesVideoHtml);
    $htmlSalesVideoHtml = str_replace('%parameters', implode("&", $htmlEmbedParamenters), $htmlSalesVideoHtml);
    ?>

    <div class="video__wrapper">
        <?php if ($formName === 'jogo_marketing_form_a') echo $htmlSalesVideoHtml; ?>
    </div>

    <p class="headline__call text__center">
        Domine o verdadeiro jogo do Marketing Digital e comece a prosperar por
        meio de uma das <strong class="text__accent">três profissões mais valorizadas e cobiçadas</strong> do Digital.
    </p>

    <p>
        <span class="evento__online animation__evento_online">Evento 100% online e gratuito</span>
        <span class="evento__online">
            <span class="iconify" data-icon="bi:calendar-check-fill"></span>
            7 de junho
        </span>
    </p>

    <form 
        id="subscription" 
        method="POST" 
        action=<?php echo "/obrigado?pagina=$formName"; ?> 
        class="form__control" 
        name="<?php echo $formName; ?>">
        <div class="input__group">
            <label for="__name">Nome</label>
            <input required class="input__control" type="text" id="__name" placeholder="Seu nome completo">
        </div>
        <div class="input__group">
            <label for="__email">E-mail</label>
            <input required class="input__control" type="email" id="__email" placeholder="email@email.com">
        </div>
        <div class="input__group">
            <label for="__phone">Telefone</label>
            <input required class="input__control" type="phone" id="__phone" placeholder="99 999 999 999">
        </div>

        <div class="input__group">
            <button class="call_to_action" type="submit">GARANTIR MINHA VAGA</button>
        </div>
    </form>
</article>