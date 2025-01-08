export default function Todo({ text, isCompleted, isDeleted = false }) {
  // Ternary operator
  //   if (isDeleted) {
  //     return null;
  //   } else {
  //     return <li>{isCompleted ? <del>{text}</del> : text}</li>;
  //   }

  // Logical operator
  if (isDeleted) {
    return null;
  } else {
    return (
      <li>
        {text} {isCompleted && '✅'}
      </li>
    );
  }
}
