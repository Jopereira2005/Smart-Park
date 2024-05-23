import styles from './ParkLotCard.module.scss'

const ParkLotCard = ({name, type, status}) => {
  return (
    <div className={ styles.card }>
      <div className={ styles.card__info }>
        <h1 className={ styles.card__info__name }>Vaga: { name }</h1>
        <h2 className={ styles.card__info__type }>Tipo: { type }</h2>
      </div>
      
      <div className={ styles.card__status }>
        <p style={
          status == '1'
          ? {color: "#66F0AE"}
          : {color: "#FC7878"} 
        } 
        className={ styles.card__status__state }>
          { status == '1' ? "disponível" : "indisponível" }
        </p>

        <div style={
          status == '1'
          ? {backgroundColor: "#66F0AE"}
          : {backgroundColor: "#FC7878"} 
        } className={ styles.card__status__icon }></div>
      </div>
    </div>
  );
};

export default ParkLotCard