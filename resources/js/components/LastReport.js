import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class LastReport extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('lastReport')
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
          <div key={item.id} className="last-news-body">
            <div className="time">14:15</div>
            <a href={`/reports/${item.id}`}>
              {item.title}
            </a>
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

if (document.getElementById('lastReport')) {
    ReactDOM.render(<LastReport />, document.getElementById('lastReport'));
}
