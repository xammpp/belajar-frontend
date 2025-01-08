import Todo from './Todo';

export default function TodoList() {
  return (
    <ul>
      <Todo isCompleted={true} text="Learn about HTML" isDeleted={true} />
      <Todo isCompleted={true} text="Learn about CSS" />
      <Todo isCompleted={true} text="Learn about JavaScript" />
      <Todo isCompleted={false} text="Learn about ReactJS" />
    </ul>
  );
}
