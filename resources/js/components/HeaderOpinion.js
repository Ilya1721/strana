import React, { Component, Fragment } from 'react';
import ReactDOM from 'react-dom';

export default class HeaderOpinion extends Component {
    constructor(props) {
      super(props);
      this.state = {
        items: []
      };
    }

    componentDidMount() {
      fetch('headerOpinion')
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
                <p>
                  <a href={`/opinions/${item.id}`}>
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
          <>
            <div className="upper-header">
              <div className="header-img-div">
                <a href="/">
                  <picture>
                    <source type="image/webp" srcSet="https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353" />
                    <source type="image/jpeg" srcSet="https://cdn.glitch.com/b44a673b-4a9b-48e5-bbac-c9c087510b1c%2Flogo.png?v=1580228691139" />
                    <img src="https://cdn.glitch.com/df2f4336-7807-4759-9fe9-87dd99b452c8%2Flogo.webp?v=1580224340353" />
                  </picture>
                </a>
              </div>
              { this.renderItems() }
            </div>
          </>
        );
    }
}

if (document.getElementById('headerOpinion')) {
    ReactDOM.render(<HeaderOpinion />, document.getElementById('headerOpinion'));
}
