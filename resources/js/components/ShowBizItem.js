import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ShowBizItem extends Component {
    constructor(props) {
      super(props);
      this.state = {
        item: {}
      };
    }

    componentDidMount() {
      let path = window.location.pathname;
      fetch('/showbiz/' + path.substr(path.lastIndexOf('/') + 1) + '/')
        .then(response => {
          return response.json();
        })
        .then(item => {
          this.setState({ item });
        })
    }

    renderItems() {
        return(
          <div className="content-block-news">
            <p className="header">
              { this.state.item.title }
            </p>
            <p className="date">Сегодня, 14:32</p>
            <p className="text">
              { this.state.item.body }
            </p>
          </div>
        );
    }

    render() {
        return (
          <div>
            { this.renderItems() }
          </div>
        );
    }
}

if (document.getElementById('showbiz-item')) {
    ReactDOM.render(<ShowBizItem />, document.getElementById('showbiz-item'));
}
