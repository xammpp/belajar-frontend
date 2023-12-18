import React from 'react';
import './YoutubeComponent.css';

const YoutubeComponent = (props) => {
  return (
    <div className="youtube-wrapper">
      <div className="img-thumb">
        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/youtube-thumbnail-template-design-d45e855a31739ec1f58b2d0ffb7013df_screen.jpg?ts=1591603072" alt="Logo" />
        <p className="time">{props.time}</p>
      </div>
      <p className="title">{props.title}</p>
      <p className="desc">{props.desc}</p>
    </div>
  );
};

YoutubeComponent.defaultProps = {
  time: '00.00',
  title: 'Title Here',
  desc: 'description title',
};

export default YoutubeComponent;
