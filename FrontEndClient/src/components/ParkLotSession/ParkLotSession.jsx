import styles from './ParkLotSession.module.scss'
import ParkLotCard from '../ParkLotCard/ParkLotCard';

const ParkLotSession = () => {
  const parklots = [
    {id: 1, name: "A01", type: "Normal", status: 1},
    {id: 2, name: "A02", type: "Deficiente", status: 1},
    {id: 3, name: "A03", type: "Normal", status: 1},
    {id: 4, name: "A04", type: "Idoso", status: 0},
    {id: 5, name: "A05", type: "Normal", status: 1},
    {id: 6, name: "A06", type: "Normal", status: 0}
  ];

  return (
    <div className={styles.container}>
      {parklots.map((parklot) => (
        <ParkLotCard 
          key={ parklot.id }
          name={ parklot.name }
          type={ parklot.type }
          status= { parklot.status }
        />
      ))}
    </div>
  );
};

export default ParkLotSession