import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Opinion extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('opinion')
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
          <div key={item.id} className="content-block-opinion">
            <div className="inner-block">
              <div>
                <a href={`/opinions/${item.id}`}>
                  <picture>
                    <source type="image/webp" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675" />
                    <source type="image/jpeg" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.jfif?v=1580228549137" />
                    <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Fnews2.webp?v=1580229606675" />
                  </picture>
                </a>
              </div>
              <div>
                <p className="text-grey">
                  <a href={`/opinions/${item.id}`}>
                    {item.journalist.first_name+' '}
                    {item.journalist.last_name}
                   </a>
                </p>
                <p className="text">
                  <a href={`/opinions/${item.id}`}>
                    { item.title }
                  </a>
                </p>
                <p className="date">cегодня</p>
              </div>
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

if (document.getElementById('opinion')) {
    ReactDOM.render(<Opinion />, document.getElementById('opinion'));
}