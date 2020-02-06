import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Main extends Component {
  constructor() {
    super();
    this.state = {
      items: [],
    }
  }

  componentDidMount() {
    fetch('items')
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
        <li key={item.id}>
          {item.title}
        </li>
      );
    })
  }

  render() {
      return (
          <div>
          Hello
            <ul>
              { this.renderItems() }
            </ul>
          </div>
      );
  }
}

if (document.getElementById('main')) {
    ReactDOM.render(<Main/>, document.getElementById('main'));
}
