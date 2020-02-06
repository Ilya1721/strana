import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Church extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('church')
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
          <div key={item.id} className="content-block-article">
            <div>
              <a href={`/churches/${item.id}`}>
                <picture>
                  <source type="image/webp" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675" />
                  <source type="image/jpeg" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137" />
                  <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675" />
                </picture>
              </a>
            </div>
            <div>
              <p className="date">Сегодня, 14:32</p>
              <p className="text">
                <a href={`/churches/${item.id}`}>
                  { item.title }
                </a>
              </p>
            </div>
          </div>
        );
      })
    }

    render() {
        return (
          <div>
            { this.renderItems() }
          </div>
        );
    }
}

if (document.getElementById('church')) {
    ReactDOM.render(<Church />, document.getElementById('church'));
}
