import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class HeaderArticle extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('headerArticle')
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
            <ul>
              <li>
                <a href={`/articles/${item.id}`}>
                  { item.title }
                </a>
              </li>
            </ul>
          </div>
        );
      })
    }

    render() {
        return (
          <div className="lower-header">
            { this.renderItems() }
          </div>
        );
    }
}

if (document.getElementById('headerArticle')) {
    ReactDOM.render(<HeaderArticle />, document.getElementById('headerArticle'));
}
