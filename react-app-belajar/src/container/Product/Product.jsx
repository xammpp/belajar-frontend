import React, { Component, Fragment } from 'react';
import './Product.css';
import CardProduct from '../CardProduct/CardProduct';

class Product extends Component {
  state = {
    order: 4,
  };

  handleCounterChange = (newValue) => {
    this.setState({
      order: newValue,
    });
  };

  render() {
    return (
      <Fragment>
        <div className="header">
          <div className="logo">
            <h3>Cloudy</h3>
          </div>
          <div className="troley">
            <img src="https://thumbs.dreamstime.com/z/shopping-cart-icon-symbol-flat-shape-trolley-web-store-button-online-shop-logo-sign-vector-illustration-image-black-silhouette-196187637.jpg" alt="Logo" />
            <div className="count">{this.state.order}</div>
          </div>
        </div>
        <CardProduct onCounterChange={(value) => this.handleCounterChange(value)} />
      </Fragment>
    );
  }
}

export default Product;
