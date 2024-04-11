<section class="section bannerddr"{% if data_scroll_id %} id="{{data_scroll_id}}"{% endif %}{% if data_scroll_block %} data-scroll-block="{{data_scroll_block}}"{% endif %}>
    <img src="{{base_url('public/filemanager/'~bg)}}" class="bannerddr__bg" alt="{{title}} {{subtitle}}"/>
    <div class="bannerddr__filter"></div>


    <div class="bannerddr__centerblock">
        <div class="row gx-0 flex-wrap justify-content-center">
            <div class="col-12 col-md-4">
                <div class="bannerddr__label">
                    <p class="bannerddr__title">{{title}}</p>
                    <p class="bannerddr__subtitle hidden-sm-down">{{subtitle}}</p>
                </div>
            </div>
            <div class="col-auto col-md-8">
                <div class="bannerddr__percent">
                    <h3 class="hidden">{{percent}}%</h3>
                    <h3 data-content="{{percent}}%"></h3>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <p class="bannerddr__subtitle hidden-md-up">{{subtitle}}</p>
            </div>
        </div>
    </div>


    <div class="bannerddr__button">
        <a href="{{base_url(button_link)}}">
            <button class="button button--white button--all">{{button_title}}</button>
        </a>
    </div>
</section>