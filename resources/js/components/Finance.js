import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Finance extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('finance')
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
              <a href={`/finances/${item.id}`}>
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

if (document.getElementById('finance')) {
    ReactDOM.render(<Finance />, document.getElementById('finance'));
}
