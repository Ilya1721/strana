import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link,
  NavLink
} from 'react-router-dom';
import Report from './Report';

export default class Nav extends Component {
    render() {
        return (
          <Router>
            <ul>
              <li id="nav-first-item">
                <NavLink className="menu-btn"
                   onClick={()=>window.location.href='/reports'}
                   activeClassName="selected"
                   to="/reports">
                  Новости
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                   onClick={()=>window.location.href='/articles'}
                   activeClassName="selected"
                   to="/articles">
                  Статьи
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                   onClick={()=>window.location.href='/interviews'}
                   activeClassName="selected"
                   to="/interviews">
                  Интервью
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                   onClick={()=>window.location.href='/opinions'}
                   activeClassName="selected"
                   to="/opinions">
                  Лента Соцсетей
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                   onClick={()=>window.location.href='/videos'}
                   activeClassName="selected"
                   to="/videos">
                  Видео
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                  onClick={()=>window.location.href='/ataka-na-stranus'}
                  activeClassName="selected"
                   to="/ataka-na-stranus">
                  Атака на Страну
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                  onClick={()=>window.location.href='/churches'}
                  activeClassName="selected"
                   to="/churches">
                  Церковь
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                   onClick={()=>window.location.href='/finances'}
                   activeClassName="selected"
                   to="/finances">
                  Деньги
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                  onClick={()=>window.location.href='/showbizs'}
                  activeClassName="selected"
                   to="/showbizs">
                  Шоу-Бизнес
                </NavLink>
              </li>
              <li>
                <NavLink className="menu-btn"
                  onClick={()=>window.location.href='/sports'}
                  activeClassName="selected"
                   to="/sports">
                  Спорт
                </NavLink>
              </li>
            </ul>
          </Router>
        );
    }

    handleClick(e) {
      console.log(e);
    }
}

if (document.getElementById('nav')) {
    ReactDOM.render(<Nav />, document.getElementById('nav'));
}
