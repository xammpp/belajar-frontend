import './HelloWorld.css';

export default function HelloWorld() {
  const props = {
    text: 'Hello World ReactJs Baru',
  };
  return (
    <div>
      <HeaderHelloWorld {...props} />
      <ParagraphHelloWorld />
    </div>
  );
}

function HeaderHelloWorld({ text = 'Hello World' }) {
  return (
    <div>
      <h1 className="title">{text.toUpperCase()}</h1>
    </div>
  );
}

function ParagraphHelloWorld() {
  const text = 'Selamat belajar reactjs';
  return (
    <div>
      <p className="content">{text.toLowerCase()}</p>
    </div>
  );
}
