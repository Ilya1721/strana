import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class FooterOpinion extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('footerOpinion')
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
            <a href={`/opinions/${item.id}`}>
              <picture>
                <source type="image/webp" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.webp?v=1580229441558" />
                <source type="image/jpeg" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.jpeg?v=1580228838463" />
                <img src="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Farticle1.webp?v=1580229441558" />
              </picture>
            </a>
            <div>
              <span className="text-grey">
                {item.journalist.first_name + ' ' + item.journalist.last_name}
              </span>
              <p className="text-bold">
                <a href={`/opinions/${item.id}`}>
                  {item.title}
                </a>
              </p>
              <p>
                {item.description}
              </p>
            </div>
          </div>
        );
      })
    }

    render() {
        return (
          <div className="footer-body">
            { this.renderItems() }
          </div>
        );
    }
}

if (document.getElementById('footerOpinion')) {
    ReactDOM.render(<FooterOpinion />, document.getElementById('footerOpinion'));
}
