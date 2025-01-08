export default function Container({ children }) {
  return (
    <div>
      <h1>Ini Adalah Header</h1>
      {children}
      <footer>
        <p>Ini Adalah Footer</p>
      </footer>
    </div>
  );
}
