import React, { Component } from 'react';

class CardProduct extends Component {
  state = {
    order: 4,
  };

  handleCounterChange = (newValue) => {
    this.props.onCounterChange(newValue);
  };

  handlePlus = () => {
    this.setState(
      {
        order: this.state.order + 1,
      },
      () => {
        this.handleCounterChange(this.state.order);
      }
    );
  };

  handleMinus = () => {
    if (this.state.order > 0) {
      this.setState(
        {
          order: this.state.order - 1,
        },
        () => {
          this.handleCounterChange(this.state.order);
        }
      );
    }
  };

  render() {
    return (
      <div className="card">
        <div className="img-thumb-prod">
          <img
            src="https://img-cdn.medkomtek.com/UanRIaMojPTGPgCAidkvcSQh3Nk=/730x411/smart/filters:quality(100):format(webp)/article/CAdVhN4fKBeqdLeEWpn0G/original/087325500_1547017156-Kenapa-Daging-Ayam-Harus-Dimasak-Sampai-Matang-By-Ekaterina-Kondratova-Shutterstock.jpg"
            alt="Logo"
          />
        </div>
        <p className="product-title">Daging ayam berbumbu rasa original plus tepung crispy [1 carton - 10 pack]</p>
        <p className="product-price">Rp 410.000</p>
        <div className="counter">
          <button className="minus" onClick={this.handleMinus}>
            -
          </button>
          <input type="text" value={this.state.order} />
          <button className="plus" onClick={this.handlePlus}>
            +
          </button>
        </div>
      </div>
    );
  }
}

export default CardProduct;
