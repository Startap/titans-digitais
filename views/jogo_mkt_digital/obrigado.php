<section class="attention_bar">
    <span class="iconify" data-icon="fluent:warning-20-filled"></span>
    <span>ATENÇÃO</span>
</section>

<section class="article headline__container">
    <h1 class="article__header">
        <small>O JOGO DO</small>
        <span>MARKETING DIGITAL</span>
    </h1>
    <h2 class="article__header">Falta apenas 1 passo <br>para finalizar sua inscrição</h2>


    <div class="progress__bar">
        <div class="indicator">0%</div>
    </div>

    <p>
        Toque no botão abaixo e entre no meu Grupo Vip para receber todos os materiais complementares
        e as informações referentes ao evento.
    </p>

    <a href="<?php echo $_ENV['WHATSAPP_URL']; ?>" target="_blank" rel="norel nofollow" class="call_to_action">QUERO ENTRAR NO GRUPO VIP</a>

    <p class="text__center">Grupo fechado e silencioso</p>
</section>

<?php 
if (isset($_ENV['ENVIRONMENT']) && $_ENV['ENVIRONMENT'] === 'production') 
{
    $facebookScript = <<<FbScript
        <script>
        fbq('trackCustom', '%paginaOrigin')
        gtag('event', 'conversion', {'send_to': 'AW-981525115/euVpCJv--pMCEPvEg9QD'});
        </script>
    FbScript;

    $conversionOrigin = $_GET['pagina'] === 'jogo_marketing_form_a' ? 'pagina-com-video' : 'pagina-sem-video'; 
    echo str_replace('%paginaOrigin', $conversionOrigin, $facebookScript);
}
?>