import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class MainFooter extends Component {
    render() {
        return (
          <div>
            <picture>
              <source type="image/webp" srcSet={"https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353"} />
              <source type="image/png" srcSet={"https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Flogo.png?v=1580228691139"} />
              <img src={"https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353"} />
            </picture>
            <p>
              Наши контакты: <a href="#">info@strana.ua</a>
              <a href="#">О нас</a> <a href="#">Архив материалов</a><br/>
              По вопросам размещения рекламы обращайтесь
              <a href="#">adv@strana.ua</a><br/>
              © 2016-2020, <a href="#">СТРАНА.ua.</a>
              Все права защищены.<br/>
              Частичное или полное использование материалов
              интернет-издания "СТРАНА.ua" разрешается только
              при условии прямой открытой для поисковых систем
              гиперссылки на непосредственный адрес материала на
              сайте <a href="#">strana.ua</a><br/>
              Всі матеріали, які розміщені на цьому
              сайті із посиланням на агентство "Інтерфакс-Україна",
              не підлягають подальшому відтворенню та/чи розповсюдженню
              в будь-якій формі, інакше як з письмового дозволу агентства
              "Інтерфакс-Україна".
            </p>
          </div>
        );
    }
}

if (document.getElementById('main-footer')) {
    ReactDOM.render(<MainFooter />, document.getElementById('main-footer'));
}
