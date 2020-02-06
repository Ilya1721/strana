import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class FooterPickArticle extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('footerPickArticle')
        .then(response => {
          return response.json();
        })
        .then(items => {
          this.setState({ items });
        })
    }

    renderItems() {
      return this.state.items.map(item => {
        return(
          <div key={item.id} className="content-block-reverse">
            <a href={`/articles/${item.id}`}>
              <picture>
                <source type="image/webp" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.webp?v=1580229297518" />
                <source type="image/jpeg" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.jpg?v=1580228527324" />
                <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews3.webp?v=1580229297518" />
              </picture>
            </a>
            <p>
              <a href={`/articles/${item.id}`}>
                {item.title}
              </a>
            </p>
          </div>
        );
      })
    }

    render() {
        return (
          <div className="footer-body">
            { this.renderItems() }
          </div>
        );
    }
}

if (document.getElementById('footerPickArticle')) {
    ReactDOM.render(<FooterPickArticle />, document.getElementById('footerPickArticle'));
}
