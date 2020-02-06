import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Attack extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('ataka-na-stranu')
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
          <div key={item.id} className="content-block">
            <p className="date">Сегодня, 14:32</p>
            <p className="text">
              <a href={`/ataka-na-stranus/${item.id}`}>
                { item.title }
              </a>
            </p>
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

if (document.getElementById('attack')) {
    ReactDOM.render(<Attack />, document.getElementById('attack'));
}
