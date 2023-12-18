import React, { Component } from 'react';
import YoutubeComponent from '../../component/YoutubeComponent/YoutubeComponent';

class Home extends Component {
  render() {
    return (
      <div>
        <p>Youtube Thumbnail Component</p>
        <hr />
        <YoutubeComponent time="7.12" title="Naruto Shippuden" desc="2x ditonton. 2 hari yang lalu" />
        <YoutubeComponent time="8.10" title="One Piece" desc="2x ditonton. 2 hari yang lalu" />
        <YoutubeComponent time="10.12" title="Swort Art Online" desc="2x ditonton. 2 hari yang lalu" />
        <YoutubeComponent time="5.11" title="Akamegakil" desc="2x ditonton. 2 hari yang lalu" />
        <YoutubeComponent />
      </div>
    );
  }
}

export default Home;
