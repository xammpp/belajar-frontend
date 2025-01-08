import Row from './Row';

export default function Table() {
  return (
    <table border={1}>
      <tbody>
        <Row id={1} text="1" />
        <Row id={2} text="2" />
        <Row id={3} text="3" />
      </tbody>
    </table>
  );
}
