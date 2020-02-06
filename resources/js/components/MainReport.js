import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class MainReport extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('rightBarReport')
        .then(response => {
          return response.json();
        })
        .then(items => {
          this.setState({ items });
        })
    }

    renderItems() {
      let i = 1;
      return this.state.items.map(item => {
        return(
          <div key={item.id} className="content-block">
            <div className="left-block">
              {i++}
            </div>
            <div className="right-block">
              <a href={`/reports/${item.id}`}>
                {item.title}
              </a>
            </div>
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

if (document.getElementById('mainReport')) {
    ReactDOM.render(<MainReport />, document.getElementById('mainReport'));
}
