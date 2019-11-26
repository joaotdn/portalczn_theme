<div class="width-100 component-loteria">
    <div class="width-100">
        <header class="width-100 text-center margin-bottom-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-caixa.png" alt="">
        </header>

        <ul class="accordion" data-accordion>
            <li class="accordion-item is-active" data-accordion-item>
                <a href="#" class="accordion-title megasena">Mega-sena</a>
                <div class="accordion-content megasena-results" data-tab-content>
                </div>
            </li>
            <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title quina">Quina</a>
                <div class="accordion-content quina-results" data-tab-content>
                </div>
            </li>
            <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title lotofacil">Lotofacil</a>
                <div class="accordion-content lotofacil-results" data-tab-content>
                </div>
            </li>
        </ul>

        <a href="http://loterias.caixa.gov.br/wps/portal/loterias" target="_blank"
           class="width-100 button expanded small margin-bottom-0"
           title="Veja todos os resultados da Loteria Caixa">Mais resultados</a>
    </div>
</div>