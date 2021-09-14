<div id="modalFormulario" class="modal">
    <div class="modal__content">
        <span class="close">&times;</span>
        
        <p>Digite seu e-mail abaixo e prepare-se para uma aula de
            <strong style="font-size: 1.5rem;">
                conteúdo exclusivo
            </strong> com quem
            já gerenciou mais de
            <strong style="font-size: 1.5rem;">
                1 MILHÃO de reais em anúncios online.
            </strong>
        </p>

        <form id="subscription" method="POST" action="https://newtimes.activehosted.com/proc.php" class="form__control">
            <input type="hidden" name="u" value="3" />
            <input type="hidden" name="f" value="3" />
            <input type="hidden" name="s" />
            <input type="hidden" name="c" value="0" />
            <input type="hidden" name="m" value="0" />
            <input type="hidden" name="act" value="sub" />
            <input type="hidden" name="v" value="2" />

            <div class="input__group">
                <label for="__name">Nome</label>
                <input required class="input__control" type="text" id="__name" name="fullname" placeholder="Seu nome completo">
            </div>
            <div class="input__group">
                <label for="__email">E-mail</label>
                <input required class="input__control" type="email" id="__email" name="email" placeholder="email@email.com">
            </div>
            <div class="input__group">
                <button class="modal__button" type="submit">GARANTIR MINHA VAGA</button>
            </div>
        </form>
    </div>
</div>