import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class RightBarArticle extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('rightBarArticle')
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
          <div key={item.id}>
            <a href={`/articles/${item.id}`}>
              <picture>
                <source type="image/webp" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675" />
                <source type="image/jpeg" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137" />
                <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675" />
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
          <>
            { this.renderItems() }
          </>
        );
    }
}

if (document.getElementById('rightBarArticle')) {
    ReactDOM.render(<RightBarArticle />, document.getElementById('rightBarArticle'));
}
